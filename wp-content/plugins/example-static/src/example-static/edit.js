/**
 * Retrieves the translation of text.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/packages/packages-i18n/
 */
import { __ } from '@wordpress/i18n';

/**
 * React hook that is used to mark the block wrapper element.
 * It provides all the necessary props like the class name.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/packages/packages-block-editor/#useblockprops
 */
import { useBlockProps, RichText, InspectorControls } from '@wordpress/block-editor';
import { PanelBody, ColorPicker, RangeControl } from '@wordpress/components';

/**
 * Lets webpack process CSS, SASS or SCSS files referenced in JavaScript files.
 * Those files can contain any CSS code that gets applied to the editor.
 *
 * @see https://www.npmjs.com/package/@wordpress/scripts#using-css
 */
import './editor.scss';

/**
 * The edit function describes the structure of your block in the context of the
 * editor. This represents what the editor will render when the block is used.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/block-api/block-edit-save/#edit
 *
 * @return {Element} Element to render.
 */
export default function Edit({ attributes, setAttributes }) {
	const { title, backgroundColor, textColor, padding, fontSize } = attributes;

	return (
        <>
            <InspectorControls>
                <PanelBody title="Setting" initialOpen={true}>
                    <ColorPicker
                        color={backgroundColor}
                        onChangeComplete={(value) => setAttributes({ backgroundColor: value.hex })}
                        disableAlpha
                    />
                    <ColorPicker
                        color={textColor}
                        onChangeComplete={(value) => setAttributes({ textColor: value.hex })}
                        disableAlpha
                    />
                    <RangeControl
                        label="Padding (px)"
                        value={padding}
                        onChange={(value) => setAttributes({ padding: value })}
                        min={0}
                        max={200}
                    />
                    <RangeControl
                        label="Font size (px)"
                        value={fontSize}
                        onChange={(value) => setAttributes({ fontSize: value })}
                        min={12}
                        max={72}
                    />
                </PanelBody>
            </InspectorControls>

            <div
                { ...useBlockProps({
                    style: {
                        backgroundColor,
                        color: textColor,
                        padding: `${padding}px`
                    }
                }) }
            >
                <RichText
                    tagName="h2"
                    value={title}
                    onChange={(value) => setAttributes({ title: value })}
                    style={{ fontSize: `${fontSize}px`, color: `${textColor}` }}
                    placeholder="Title..."
                />
            </div>
        </>
    );
}
